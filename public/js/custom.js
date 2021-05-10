

document.addEventListener('click',function(event){
    let id = event.target.id;
    var url = "";
    const buttons = ['insert','update','delete'];
    if(buttons.includes(id)){
        if(id == "insert"){
            url = "/add-new";
            insert(url,getValue());
        }
        else if(id == "update"){
            url = "/update";
            insert(url,getValue());
        }
        else if(id == 'delete'){
            url = '/delete';
            insert(url,{id:parseInt(event.target.name)});
        }
        
    }
    
      

});

function getValue(){
    return {
        name: document.querySelector("#name").value,
        email: document.querySelector("#email").value,
        class:document.querySelector("#class").value,
        updateId:document.querySelector("#updateId")?parseInt(document.querySelector("#updateId").value):""
    }
}

function insert(url,data){
    axios.post(url,data)
    .then(function(response){
        alert(response.data);
    })
    .catch(function(error){
        alert(error);
    })
}