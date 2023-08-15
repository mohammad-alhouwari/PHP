function myFunction() {
    let Search, filter, ul, li, a, i, txtValue;
    Search = document.getElementById("Search");
    filter = Search.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = document.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("span")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}




let main_ul = document.getElementById("myUL1");
let main_local = document.getElementById("myUL2");



var local_arry ="";
if (localStorage.getItem(`local`)!=null) {
    local_arry+=localStorage.getItem(`local`)
}
main_local.innerHTML=local_arry;





apii()
async  function apii() {
    const apiText = await fetch('https://64bbac6a7b33a35a4446905c.mockapi.io/tasks')
    const api = await apiText.json()
    var ul_arry = "";

    
        for (let i = 0; i < api.length; i++) {
            
            let k_k=`${api[i].task}`;
            k_k=k_k.replace(" ","");
            
       
            ul_arry += `
           <li class="api_list"  >
           <span id="${k_k}">${api[i].task}</span>
           <button class="Delete">Delete</button>
           <button class="Update">Update</button>
           </li>
                `;
        }
        main_ul.innerHTML=ul_arry;
}












function btn_go(event) {
    let goo = event.target.className;
        if (goo=="Delete") {
        event.target.parentElement.remove();  
        localStorage.setItem(`local`,`${main_local.innerHTML}`)
        
    }
    if (goo=="Update") {
        let taskNamee = event.target.parentElement.getElementsByTagName("span")[0].innerHTML;
        console.log(taskNamee);
        let person = prompt("Please enter your name", `${taskNamee}`);
        event.target.parentElement.getElementsByTagName("span")[0].innerHTML=`${person}`;

        localStorage.setItem(`local`,`${main_local.innerHTML}`)


    }
}











function add_task_btn() {
    let new_task = document.getElementById("add_task").value;
    let k_k=`${new_task}`;
    k_k=k_k.replace(" ","");
    let new_li=
    `
    <li class="local_list">
    <span id="${k_k}">${new_task}</span>
    <button class="Delete">Delete</button>
    <button class="Update">Update</button>
    </li>
    `;
    local_arry+=new_li;
    localStorage.setItem(`local`,`${local_arry}`)

    main_local.innerHTML=local_arry;
    }
