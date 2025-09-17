

function changeBackground(){
    document.body.style.backgroundColor = 'cyan';
}

function hideList(){
    document.getElementsByTagName('ul')[0].style.display = 'none';
}


function getNodeList(){
    let gn = document.getElementById('content');
    //change style
   // gn.style.backgroundColor = 'red';
   // console.log(gn.childNodes);
    gn.childNodes.forEach(function(node){
   
        // if(node.nodeType == 1){
        //     console.log(node.nodeName);
        //     console.log(node.getAttribute('type'));
        // }
    });
}

function copyListItem(){
    let list = document.getElementById('list');
    let newlist = list.cloneNode(true);
    let content = document.getElementById('content');
    content.appendChild(newlist);
}

function addParagraph(){
    let list = document.getElementById('list');
    let para = document.createElement('p');

    para.setAttribute('class','newclass');
    let input = prompt("Enter any text");

    let text = document.createTextNode(input);
    para.appendChild(text);
    console.log(para);
    let content = document.getElementById('content');
    content.appendChild(para);
}

function readH1(){
    let h1 = document.querySelector('h1');
    alert(h1.innerHTML);
}