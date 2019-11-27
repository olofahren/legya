var tempItems = [];   //declare an array

function addItem(){
    //add check to not add already existing item

document.getElementById('itemIdInput').onkeydown = function(e){
        if(e.keyCode == 13){
            var itemId = document.getElementById("itemIdInput").value;  //get the value of an element by it's id
            tempItems.push(itemId); //put to the array
            console.log(tempItems);
            document.getElementById('itemIdInput').value = '';

        }
    }

}

function addItemClick(){
    var itemId = document.getElementById("itemIdInput").value;  //get the value of an element by it's id
    tempItems.push(itemId); //put to the array
    console.log(tempItems);
    document.getElementById('itemIdInput').value = '';
}

function uploadItems(){

    document.getElementById("searchField").value = tempItems;
}


 
