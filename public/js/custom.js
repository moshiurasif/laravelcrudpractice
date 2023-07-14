function sendData(){
    const myName = document.getElementById('name').value;
    const myRoll = document.getElementById('roll').value;
    const myClass = document.getElementById('class').value;
    axios.post('/insertData', {
        name: myName,
        roll: myRoll,
        class: myClass
      })
      .then(function (response) {
        document.getElementById("show-response").innerText = response.data;
        
      })
      .catch(function (error) {
        console.log(error);
      });
}

const deleteData = () =>{
    const myId = document.getElementById('my-id').value;
    axios.post('/deleteData', {
        id:myId
      })
      .then(function (response) {
        document.getElementById("show-response").innerText = response.data;
        
      })
      .catch(function (error) {
        console.log(error);
      });
}

const updateData = () =>{
    const myId = document.getElementById('my-id').value;
    const myName = document.getElementById('name').value;
    const myRoll = document.getElementById('roll').value;
    const myClass = document.getElementById('class').value;

    axios.post('/updateData', {
        id:myId,
        name:myName,
        roll:myRoll,
        class:myClass,
      })
      .then(function (response) {
        document.getElementById("show-response").innerText = response.data;
        
      })
      .catch(function (error) {
        console.log(error);
      });
}

