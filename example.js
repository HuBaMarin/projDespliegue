const express = require('express');
const mysql = require('mysql');
const bcrypt = require('bcrypt');
const jwt = require('jsonwebtoken');
const app = express();

// Configure MySQL connection
const db = mysql.createPool({ /* pool configuration */ });

// Middleware to parse JSON body
app.use(express.json());

// Route for user to access their gym membership
app.get('/users/:id', authenticateMiddleware, (req, res) => {
    const id = req.params.id;
    const user = req.user;

    if (user.id !== id && user.role !== 'admin') {
        return res.status(403).send('Unauthorized');
    }

    // Query the database to fetch the user's gym membership details
    db.query('SELECT * FROM gym_memberships WHERE user_id = ?', [id], (error, results) => {
        if (error) throw error;
        res.json(results);
    });
});

// Route for admin to access all users
app.get('/admin/users', authenticateAdminMiddleware, (req, res) => {
    // Query the database to fetch all users
    db.query('SELECT * FROM users', (error, results) => {
        if (error) throw error;
        res.json(results);
    });
});

// Middleware to authenticate the user
function authenticateMiddleware(req, res, next) {
    const token = req.headers['authorization'];
    if (!token) return res.status(403).send('No token provided');

    jwt.verify(token, process.env.ACCESS_TOKEN_SECRET, (err, decoded) => {
        if (err) return res.status(401).send('Failed to authenticate token');

        req.user = decoded;
        next();
    });
}

// Middleware to authenticate the admin
function authenticateAdminMiddleware(req, res, next) {
    const token = req.headers['authorization'];
    if (!token) return res.status(403).send('No token provided');

    jwt.verify(token, process.env.ACCESS_TOKEN_SECRET, (err, decoded) => {
        if (err) return res.status(401).send('Failed to authenticate token');

        if (decoded.role !== 'admin') {
            return res.status(403).send('Only admins can access this route');
        }

        req.user = decoded;
        next();
    });
}

// Start the server
app.listen(3000, () => {
    console.log('Server started on port  3000');
});
