const addButton=document.getElementById("Add")
const inputToDo=document.getElementById("inputToDo")
const ul=document.querySelector(".ToDo-List")
addButton.addEventListener("click",()=>{
    if(inputToDo.value=="") alert("Debe agregar una tarea")
    else{
        const li=document.createElement("li")
        li.innerHTML=`<label><input type="checkBox">${inputToDo.value}</label><span class="delete">X</span>`
        ul.appendChild(li)
        inputToDo.value=""
        deleteItem(li)
    }
})
function deleteItem(item){
    const deleteBtn=item.querySelector(".delete")
    deleteBtn.addEventListener("click",(e)=>{
        e.target.parentElement.remove();
    })
}