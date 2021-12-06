# Generates <i class="icon"></i> with a link
make_icon <- function(icon) {
  return(htmltools::tag("i", list(class = icon)))
}
ilink <- function(icon = NULL, url = NULL,lvl=2) {
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
  if(lvl==1) return(htmltools::a(href = url, text, class = "iconlink1"))
  if(lvl==2) return(htmltools::a(href = url, text, class = "iconlink2"))
  if(lvl==3) return(htmltools::a(href = url, text, class = "iconlink3"))
}
#