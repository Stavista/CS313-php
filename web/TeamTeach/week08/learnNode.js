//Challenge 1: Hello World
//console.log("HELLO WORLD")

//Challenge 2 : Babby Steps
//var result = 0;
//for (var i = 2; i < process.argv.length; i++) {
//    result = result + Number(process.argv[i]);
//}
//
//console.log(result);

//CHallenge 3: My First I/O
//var fs = require('fs');
//var file = fs.readFileSync(process.argv[2]);
//var num = file.toString().split('\n').length -1;
//
//console.log(num);

//Challenge 4: My First ASync I/O
//function count(error, data){
//    var num = data.toString().split('\n').length - 1;
//    console.log(num);
//}
//
//var fs = require('fs');
//var file = fs.readFile(process.argv[2], count);

//Challenge 5: Filtered Ls
//var fs = require('fs');
//var path = require('path');
//
//fs.readdir(process.argv[2], (err, list) => {
//  list.forEach((filename) => {
//    if (path.extname(filename) === '.' + process.argv[3]) {
//      console.log(filename);
//    }
//  });
//});

//Challenge 6: Make It Modular
//var filterDir = require('./filter-dir');
//
//var dirPath = process.argv[2];
//var extension = process.argv[3];
//
//filterDir(dirPath, extension, (err, list) => {
//  if (err) {
//    console.log('An error happened when reading ' + dirPath);
//    return err;
//  }
//  
//  list.forEach((filename) => {
//    console.log(filename);
//  });
//});

//Challenge 7: HTTP CLIENT
//var http = require('http');
//
//var url = process.argv[2];
//
//http.get(url, (response) => {
//  response.setEncoding('utf8');
//
//  response.on('data', (data) => {
//    console.log(data);
//  });
//});

//Challenge 8: HTTP COLLECT
//var http = require('http'),
//    bl = require('bl'),
//    url = process.argv[2];
//
//http.get(url, function (res) {
//    res.pipe(bl(function (err, data) {
//       data = data.toString();
//
//       console.log(data.length);
//       console.log(data);
//    }));
//});

//Challenge 9: Juggling Async
//var http = require('http'),
//    urls = [];
//
//for (var i = 2; i < process.argv.length; i++) {
//    urls.push(process.argv[i]);
//}
//
//parseUrl(urls[0], function () {
//    parseUrl(urls[1], function () {
//        parseUrl(urls[2], function () {
//            // End
//        });
//    });
//});
//
//function parseUrl(url, callback) {
//    var result = '';
//
//    http.get(url, function (res) {
//        res.setEncoding('utf8');
//
//        res.on('data', function (chunk) {
//            result += chunk;
//        });
//
//        res.on('end', function () {
//            console.log(result);
//            callback();
//        });
//    });
//}


//Challenge 10: Time Server
//var net = require('net');
//
//var server = net.createServer(function (socket) {
//    socket.write(getDate() + '\n');
//    socket.end();
//});
//
//server.listen(process.argv[2]);
//
//function getDate() {
//    var date = new Date(),
//        year = date.getFullYear(),
//        month = date.getMonth() + 1,
//        day = date.getDate(),
//        hours = date.getHours(),
//        minutes = date.getMinutes();
//
//    // "2013-07-06 07:42"
//    return year + '-' + padNumber(month) + '-' + padNumber(day) + ' ' + padNumber(hours) + ':' + padNumber(minutes);
//}
//
//function padNumber(number) {
//    if (number < 10) {
//        return '0' + number;
//    } else {
//        return number;
//    }
//}


//Challenge 11: HTTP File Server 
//var http = require('http'),
//    fs = require('fs'),
//    port = process.argv[2],
//    fileName = process.argv[3],
//    server;
//
//server = http.createServer(function (request, response) {
//    fs.createReadStream(fileName).pipe(response);
//});
//
//server.listen(port);

//Challenge 12: UpperCaserer
//var http = require('http')
//var map = require('through2-map')
//
//var port = process.argv[2]
//
//http.createServer(function (request, response) {
//    request
//        .pipe(map(function (chunk) {
//            return chunk.toString().toUpperCase()
//        }))
//        .pipe(response)
//}).listen(port)

//Challenge 13: HTTP Json API Server
//var http = require('http'),
//    url = require('url'),
//    port = process.argv[2],
//    server;
//
//server = http.createServer(function (request, response) {
//    var data = url.parse(request.url, true),
//        json;
//
//    switch(data.pathname) {
//        case '/api/parsetime':
//            var date = new Date(data.query.iso);
//
//            json = {
//                hour: date.getHours(),
//                minute: date.getMinutes(),
//                second: date.getSeconds()
//            };
//            break;
//
//        case '/api/unixtime':
//            json = {
//                unixtime: (new Date(data.query.iso)).getTime()
//            };
//            break;
//    }
//
//    if (json) {
//        response.writeHead(200, { 'Content-Type': 'application/json' });
//        response.end(JSON.stringify(json));
//    } else {
//        response.writeHead(404);
//        response.end();
//    }
});

server.listen(port);
