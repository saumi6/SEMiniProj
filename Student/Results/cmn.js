var trial_con = require('mysql');
var file = require('fs');
var connection = trial_con.createConnection(
    {
        host:'localhost',
        user:'mahos',
        database:'college',
        password:'0sc1llat1on_5#'
    }
);
connection.connect((err)=>{
    if(err){
        console.log(err);
    }
    else{
        console.log("Connection successful");
    }
})
connection.query('Select rollno from S1mark',function(err,res,fields){
    if(err)
    {
        console.log(err)
    }
    else
    {
        console.log(res);
    }
});