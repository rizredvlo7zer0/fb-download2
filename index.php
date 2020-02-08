<!DOCTYPE html>
<html lang="en" class="h-100">

<html>
<head>
<style>
body {
  background-image: url("https://1.bp.blogspot.com/-eLTvVd1yQSs/XiFUjvHwyyI/AAAAAAAAAR8/OYWSm4-IpM0MrH_aaTBoe5gKP6eDBoitACLcBGAsYHQ/s1600/20200117_132912.jpg");
  background-repeat: no-repeat;
  background-position: right top;
  margin-right: 200px;
  background-attachment: fixed;
  background-size: 100% ;
  background-position:top center;
}
</style>
</head>
<body>

<style>body{cursor: url(), progress !important; repeat center;color:lime;} .kotak{text-align:center;background:transparant;border:solid lime
2px;border-radius:10px;position:fixed;top:2px;left:2px;left:1px;right:1px;}.kotak1{text-align:center;background:transparant;border:solid lime 2px;border-radius:10px;position:fixed;bottom:2px;left:1px;right:1px;}</style><br/><br/>


<div class="kotak"><font color="green">••••• Zona Red •••••</font></div><div class="kotak1"><blink>|"Dev By Rizred Vlo 7zer0✬"|</blink></div></center>




<head>
    <meta charset="utf-8">
    <title>Facebook Video Downloader</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="asset/app.css">
</head>

<!--<body class="d-flex flex-column h-100">
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal">Facebook Video Downloader</h5>
        <nav class="my-2 my-md-0 mr-md-3">
            by : Rizred Vlo 7zer0✬<!--<a class="p-2 text-dark" href="https://github.com/vikas5914/Facebook-Video-Downloader">GitHub</a>-->
        </nav>
    </div>-->
    <main role="main" class="flex-shrink-0">
        <div class="container">
            <div class="title px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
                <h1 class="display-4"><font color="red">Facebook Video Downloader</h1></font>
            </div>
            <div class="input-group">
                <label class="sr-only" for="link">Facebook Video URL</label>
                <input type="text" class="form-control mb-2 mr-sm-2" id="link" placeholder="Facebook Video Link"
                    name="link">
                <span class="input-group-btn">
                    <input type="button" name="download" id="download" value="Download!" class="btn btn-primary"
                        data-disable-with="Search" onclick="getDownloadLink();">
                </span>
            </div>
            <div id="bar" style="display:none;">
                <p class="text-center"><img src="asset/ajax.gif"></p>
            </div>
            <div class="mt-3" id="result" style="display: none;">
                <div id="downloadUrl">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex p-2 bg-primary text-white">Title</div>
                            <div class="d-flex p-2 bg-dark text-white" id="title"></div>
                        </div>
                        <div class="col-md-12 mt-1">
                            <div class="d-flex p-2 bg-primary text-white">Source</div>
                            <div class="d-flex p-2 bg-dark text-white" id="source"></div>
                        </div>
                        <div class="col-md-12 mt-1">
                            <div class="d-flex p-2 bg-primary text-white">Download Links:</div>
                            <div class="p-2 bg-dark text-break" id="links"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer mt-auto py-3">
        <div class="container-fuild text-center">
            <span class="text-muted"><!--This website does not host any pirated or copyright content on its server, and all
                the videos that you download are downloaded to your system directly from their respective CDN servers.-->
            </span>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="asset/app.js?v=1"></script>
</body>

<head>
<style>
body {margin:0;}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  position: fixed;
  bottom: 0;
  width: 100%;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}
</style>
</head>
<body>

<head>
<style>
body {margin:0;}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  position: fixed;
  bottom: 0;
  width: 100%;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}
</style>
</head>
<body>

<ul>
  <li><b><font color="red">@copyright by Rizredvlo</b></font></li>
</ul>

</body>

</html>
