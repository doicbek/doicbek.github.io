var ToC =
  "<nav role='navigation' class='table-of-contents'>" +
    "<h5 class='centered'>Table of Contents</h5>" +
    "<ul>";

var newLine, el, title, link;

$("article h4").each(function() {

  el = $(this);
  title = el.text();
  link = "#" + el.attr("id");

  newLine =
    "<li>" +
      "<a href='" + link + "'>" +
        title +
      "</a>" +
    "</li>";

  ToC += newLine;

});

ToC +=
   "</ul>" +
  "</nav>";

$("article").prepend(ToC);