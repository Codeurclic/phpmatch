# NodeJS
## Références
http://www.books24x7.com/books24x7.asp
"https://books.google.fr/books/about/Working_with_Mocha_js_Chai_js_and_Sinon.html"

## Quizz Javascript
https://goo.gl/forms/jbdeHnycSDYKPdgm1

## Tester l'installation de nodejs
Créer un répertoire nodetest et copier coller le fichier server.js :
```
var http = require("http");
var name=process.argv[2];
function myserver(request, response) 
{
  response.writeHead(200, {"Content-Type": "text/plain"});
  response.write("Hello World");
  console.log("My name is", name);
  response.end();
}
http.createServer(myserver).listen(8080);
```

Lancer le serveur :
```
nodejs server.js IMIE
```

Aller sur http://localhost:8080/ pour vérifier que tout fonctionne correctement.


## Construire un projet initial
### Répertoires

```
cd
mkdir nodematch
cd nodematch
mkdir bin
mkdir lib
```

- lib = fichier de packaging du serveur
- bin = fichiers application web

### lib/server.js
```
var http = require("http");

function begin() {
  function myserver(request, response) {
    console.log("Request received.");
    response.writeHead(200, {"Content-Type": "text/plain"});
    response.write("Hello World");
    response.end();
  }

  http.createServer(myserver).listen(8080);
  console.log("Server has started.");
}

exports.start = begin;
```
### bin/index.js
```
"use strict";
var path = require('path');
var fs = require('fs');
var lib = path.join(path.dirname(fs.realpathSync(__filename)), '../lib');
var server = require(lib+'/server.js');
server.start();
```
### package.json
```

{
  "author": " ",
  "name": "server",
  "description": "Starts an HTTP server",
  "version": "0.1.1",
  "repository": { "url": ""},
  "main": "./lib/server.js",
  "keywords": ["server","file"],
  "bin": {"index": "./bin/index"},
  "dependencies": {},
  "engines": {"node": "*"}
}
```
### Installer Mocha à la racine du projet
```
npm install mocha --save
```
### Modifier le fichier package.json
```
{
  "author": " ",
  "name": "server",
  "description": "Starts an HTTP server",
  "version": "0.1.1",
  "repository": {
    "url": ""
  },
  "main": "./lib/server.js",
  "keywords": [
    "server",
    "file"
  ],
  "bin": {
    "index": "./bin/index"
  },
  "dependencies": {
    "mocha": "^3.4.1"
  },
  "engines": {
    "node": "*"
  },
  "scripts": {
    "start": "node ./bin/index",
    "test": "mocha"
  }
}
```







