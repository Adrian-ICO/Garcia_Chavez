.container{
    position: relative;
    width: 50%;
}
.imagen{
    opacity: 1;
    display: block;
    width: 100%;
    height: auto;
    transition: .5s ease;
    backface-visibility: hidden;
}
.middle{
    transition: .5s ease;
    opacity: 0;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%)
}
.btn{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    background-color: #f1f1f1;
    color: black;
    font-size: 16px;
    padding: 16px 30px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    text-align: center;
}
.btn:hover{
    background-color: black;
    color: white;
}