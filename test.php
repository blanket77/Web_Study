<!DOCTYPE html>
<html>
<head>
<title>WEB1 - HTML</title>
<meta charset="utf-8">
</head>

<body>
  <h1><a href="index.html">Welcome</a></h1>
  <ol>
    <li><a href="test.php?name=kimyouchan&address=경상북도">HTML</a></li>
    <li><a href="test.php?name=kimyouchan&address=경상남도">CSS</a></li>
    <li><a href="test.php?name=kimyouchan&address=충청북도">JavaScript</a></li>
  </ol>

  <h2>HTML</h2>
  안녕하세요~ <?php echo $_GET['address'];?>에 사는 <?php echo $_GET['name'];?> <br>
  <p>
  <a href="https://opentutorials.org/course/3084/18409" target="_blank" title="생활코딩">Hypertext Markup Language</a> (HTML) is the standartd Markup
  language for <strong>creating <u>web</u> pages </strong>and web applications.
  Web browsers receive HTML documents from a web server or from local storage and render them into multimedia web pages. HTML describes the structure of a web page semantically and originally included cues for the appearance of the document.</p>
  <?php $first = "
  HTML elements are the building blocks of HTML pages. With HTML constructs, images and other objects, such as interactive forms, may be embedded into the rendered page.

  It provides a means to create structured documents by denoting structural semantics for text such as headings, paragraphs, lists, links, quotes and other items. HTML elements are delineated by tags, written using angle brackets." ?>
  <p style="margin-top:45px;">
  <img src="coding.jpg" width="20%">
  <?php echo $first ?></p>
  <h2>두번째</h2>
  <?php echo nl2br($first); ?>
</body>
</html>
