let todo = document.getElementById('todo');
let target=document.getElementById('target');

document.getElementById('save').addEventListener('click',()=>{
    let array = iterateAjax(todo.children).concat(iterateAjax(target.children));
    for(let i = 0; i < array.length;i++) {
        console.log(array[i]);
        sendData({
            input:array[i].input,
            checked:array[i].checked
        })
    }
})
function checkPlacement(checkbox) {
    let parentElement=checkbox.parentElement;
    let input=parentElement.children[1]

    if(checkbox.checked){
        target.appendChild(parentElement)  
    }else{
        todo.appendChild(parentElement)
    } 
}
function clicked(checkbox){
    checkbox.addEventListener("click",(event)=>{
        let ctarget=event.currentTarget;
        let parentElement=ctarget.parentElement;
        let input=parentElement.children[1]

        if(checkbox.checked){
            target.appendChild(event.currentTarget.parentElement)  
        }else{
            todo.appendChild(event.currentTarget.parentElement)
        } 
    })
}

document.getElementById("form").addEventListener("submit",(event) => {
    event.preventDefault();
    let input = document.getElementById('tache');

    let span = document.createElement('span');
    let checkbox = document.createElement("input");
    let div = document.createElement('div');
    
    

    span.innerText = input.value;
    div.append(checkbox);
    div.append(span);
    checkbox.type = "checkbox";
    todo.prepend(div);
    clicked(checkbox)

    sendData({
        input:input.value,
        checked:checkbox.checked
    })
})
function iterateTodo(target) {
    let child = todo.children;
    for(let i = 0;i < child.length;i++){
        checkPlacement(child[i].children[0]);
    }
}
function iterate(target) {
    let child = target.children;
    for(let i = 0;i < child.length;i++){
        clicked(child[i].children[0]);
    }
}
function iterateAjax(target) {
    let array = []
    for(let i = 0;i < target.length;i++){
        let checkbox = target[i].children[0];
        let span = target[i].children[1];
        if(span !== undefined) {
            array.push({
                input:span.innerText,
                checked: checkbox.checked
            })
        }
    }
    return array
}
function getContent() {
    fetch('contenu.php',{
        method:'get'
    }).then(data => data.json()).then((data) => {
        let notTodo = data.notTodo;
        let todoArray = data.todo;
        for(let i = 0; i < notTodo.length;i++) {
            target.innerHTML += notTodo[i];
        }
        for(let i = 0; i < todoArray.length;i++) {
            todo.innerHTML += todoArray[i];
        }
    }).then(() => {
        iterate(todo);
        iterate(target);
    }).catch(err => console.log(err)); 
}

function sendData(data) {
    let formData = new FormData();
    formData.append("tache",data.input);
    formData.append("checked",data.checked);

    fetch("formulaire.php",{
        method:"post",
        body:formData
    }).then(res => res.text()).then(data => console.log(data)).catch(err => console.log(err))
}
getContent();