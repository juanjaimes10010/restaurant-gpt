const tbody = document.querySelector("tbody");
const draggables = document.querySelectorAll(".draggable");

for(let i = 0; i < draggables.length; i++) {
    draggables[i].addEventListener("dragstart", function(e) {
        console.log("drag start")
        draggables[i].classList.add("dragging")
    })

    draggables[i].addEventListener("dragend", function(e) {
        console.log("drag end")
        draggables[i].classList.remove("dragging");
    })
}


tbody.addEventListener("dragover", function(e) {
    e.preventDefault();
    let element = e.target.closest("tr").getBoundingClientRect()

    if(e.clientY < element.y + element.height / 2 ){
        e.target.closest("tr").after(document.querySelector(".dragging")) 
    } else if(e.clientY > element.y + element.height / 2) {
        e.target.closest("tr").before(document.querySelector(".dragging")) 
    }
})

const tableBtn = document.querySelector("#table-btn");


let tableModal = new Modal()
tableBtn.addEventListener("click", function(e) {
    tableModal.show(`
    <form action="" method="post">
      <div>
        <p>Category</p>
        <select name="category" id="">
          <option value="na">N/A</option>
          <option value="small">small</option>
          <option value="medium">medium</option>
          <option value="large">large</option>
          <option value="x-large">x-large</option>
        </select>
      </div>
      <div>
        <p>Name</p>
        <input type="text" name="name" placeholder="ex: cheese burger, pizza" />
      </div>
      <div>
        <p>Price</p>
        <div id="price">
          $<input type="text" name="dollars" placeholder="123" />.
          <input type="text" name="cents" placeholder="00" />
        </div>
      </div>
      <div>
        <p>Quantity</p>
        <select name="quantity" id="">
          <option value="na">N/A</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>
      </div>
      <div>
        <p>Size</p>
        <select name="size" id="">
          <option value="na">N/A</option>
          <option value="small">small</option>
          <option value="medium">medium</option>
          <option value="large">large</option>
          <option value="x-large">x-large</option>
        </select>
      </div>
      <div>
        <input type="submit" name="" id="" />
      </div>
    </form>`);
})