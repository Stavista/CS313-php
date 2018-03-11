var http = require("http");
var httpStatus = require('http-status-codes');


http.createServer(onRequest).listen(8888);

function onRequest(req, res) {
    console.log(req.url);
    var path = req.url;
    switch(path){
        case '/home':
            res.writeHead(200, {"Content-Type": "text/html"});
            res.write('<h1>Welcome to the Home Page</h1>');
            res.end();
            break;
        case '/getData':
            res.writeHead(200, {"Content-Type": "application/json"});
            var data = JSON.stringify({name:"Samantha Stavast",class:"cs313"});
            res.write(data);
            res.end();
            break;
        case '/easterEgg':
            res.writeHead(403, {"Content-Type": "text/html"});
            res.write("<img src='https://i.stack.imgur.com/a6cKz.png' alt='Easter Egg'>");
            res.end();
            break;            
        default:
            res.writeHead(404, {"Content-Type": "text/html"});
            res.write('<h1>Page Not Found</h1>');
            res.end();
            break;
               }
}