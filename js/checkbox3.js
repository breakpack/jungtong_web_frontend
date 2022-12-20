function is_checked(){
    var key = 0;
    const baby_input = document.getElementById("baby");
    const ele_input = document.getElementById("ele");
    const high_input = document.getElementById("high");

    const baby_is_checked = baby_input.checked;
    const ele_is_checked = ele_input.checked;
    const high_is_checked = high_input.checked;

    if(baby_is_checked){
        key += 1;
    }
    if(ele_is_checked){
        key += 1;
    }
    if(high_is_checked){
        key += 1;
    }
    
    return key;
}
function checkbox_check(box_id){
    const baby_input = document.getElementById("baby");
    const ele_input = document.getElementById("ele");
    const high_input = document.getElementById("high");
 
    if(is_checked()){
        if(box_id == 'baby'){
            ele_input.checked=false;
            high_input.checked=false;
            campus_input.checked=false;
        }
        if(box_id == 'ele'){
            baby_input.checked=false;
            high_input.checked=false;
            campus_input.checked=false;
        }
        if(box_id == 'high'){
            baby_input.checked=false;
            ele_input.checked=false;
            campus_input.checked=false;
        }
    }
}