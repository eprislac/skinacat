var http = require("http");

http.createServer(function(request, response) {
	response.writeHead(200, {"Content-type": "text/html"});
	response.write("<html><head><title>hereKitty</title></head><body><h1>");
	response.write("Here kitty kitty...</h1></body></html>");
	response.end();
}).listen(8888);
