/*
file name: index.js
author: Drew Hubble
date: NOV 11, 2022
description:
    Index page for the web-server
*/

/*-------------------------------USER DATABASE--------------------------------*/
const Datastore = require('nedb'); // define the nedb database package
const userDatabase = new Datastore('users.db'); // initialize user database

userDatabase.loadDatabase(); // load user database (or create file if not yet existing)


/*-------------------------------SERVER--------------------------------*/
const express = require('express'); // express for web-server
const app = express(); // define server using express


app.listen(2000, () => console.log('listening at port 2000')) // listen through port 2000
app.use(express.static('public')); // use files in 'public' folder
app.use(express.json({limit: '1mb'})); // let the server read json files, with a limit of 1mb of data received

// send user data to server and add the user to database
app.post('/add_user', (request, response) => {
  const data = request.body;
  userDatabase.insert(data); // add user to user database
  console.log("User Account Created for: ", data.username); // print to console
  response.end();
});

var user_key;
// send user key to the server
app.post('/send_key', (request, response) => {
  user_key = request.body; // set user_key to the request body
  response.end();
});

var user_status;
// authenticate the user (search database with the user key)
// receive user key and search database for user key
app.get('/auth', (request, response) => {
  console.log("User Key: ", user_key);
  console.log("Searching Database for User..."); // print to console
  userDatabase.find({username: user_key.username, password: user_key.password}, (err, user) => { // search database for the user key
    if (user == '' || err) {
      console.log("User Not Found."); // print to console
      user_status = 'failure';
      response.json({user_status}); // return user_status of 'failure'
      response.end(); // end response
    }
    else {
      console.log("Found User: ", user); // print user to console
      user_status = 'success';
      response.json({user_status}); // return user_status of 'success'
      response.end(); // end response
    }
  });
});
