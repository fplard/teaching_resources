# Generates <i class="icon"></i> with a link
make_icon <- function(icon) {
  return(htmltools::tag("i", list(class = icon)))
}
ilink <- function(icon = NULL, url = NULL) {
  icon_name=switch(icon,
         site="fas fa-globe",
         article="far fa-sticky-note",
         course="fas fa-chalkboard-teacher",
         video="fas fa-video",
         book="fas fa-book",
         tuto="fas fa-list-alt",
         exo="fas fa-edit",
         github="fab fa-github")
  text <- htmltools::HTML(paste0(make_icon(icon_name)))
  return(htmltools::a(href = url, text, class = "iconlink"))
}
#