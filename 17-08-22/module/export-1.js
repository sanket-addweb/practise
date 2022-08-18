const message = () => {
    const name = "Jesse";
    const age = 40;
    let message2="This message is from import-1 and export-1"
    return name + ' is ' + age + "years old<br/>"+message2;
    };

    let add = (a,b) =>{
        return a+b;
    }
    
    // export default message;
    export {add,message}