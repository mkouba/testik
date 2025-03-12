fn main() {
    let res1 = add(10,2);
    println!("10 + 2 = {res1}");
    let res2 = subtract(10,2);
    println!("10 - 2 = {res2}");
    let res3 = multiply(10,2);
    println!("10 . 2 = {res3}");
    let res4 = divide(10,2);
    println!("10 / 2 = {res4}");
}

fn add(val1: i32, val2: i32) -> i32 {
    val1 + val2
}

fn subtract(val1: i32, val2: i32) -> i32 {
    val1 - val2
}

fn multiply(val1: i32, val2: i32) -> i32 {
    val1 * val2
}

fn divide(val1: i32, val2: i32) -> i32 {
    val1 % val2
}

#[test]
fn add_works() {
    assert_eq!(add(2, 2), 4);
}


#[test]
fn subtract_works() {
    assert_eq!(subtract(2, 2), 0);
}