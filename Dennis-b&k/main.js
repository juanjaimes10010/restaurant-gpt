addEventListener("submit", function(e) {
  e.preventDefault();
  let f = new FormData(document.querySelector('form'))
  let data = [];
  for(let entries of f.entries()) {
    data.push(entries)
  }

  console.log(data)

})