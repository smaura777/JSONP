var http = require('http');

var process = function(req,res){
  res.writeHead(200);
  //console.log("Here " + req.length);
  
  
  for (var i in req ){
    console.log( "Object " + i +" ==  "+ req[''+i+'']);
  }
  
  res.end('Hello World');
  
}

var server = http.createServer(process);
server.listen(8181);


//console.log("Hello World");