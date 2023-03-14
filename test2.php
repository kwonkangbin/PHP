<script>
    let num1 = 10;
    let num2 = '10';
    let num3 = [1,2,3,4];
    let num4 = {
        'a' : '바보',
         v : 100,
    };
    console.log(num1+num2);
    console.log(num1+(num2*1));
    num3.push(5);
    console.log(num3[4]);
    console.log(num4);
    console.log(JSON.stringify(num4));
    console.log(m(1,2));
    function m(i1,i2){
        return i1+i2;
    }
</script>

<?php
    $num1 = 10;
    $num2 = '10';
    echo $num1+$num2;
?>