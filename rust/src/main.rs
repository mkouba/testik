fn main() {
    let res1 = add(10,2);
    println!("10 + 2 = {res1}");
    let res2 = subtract(10,2);
    println!("10 - 2 = {res2}");
}

fn add(val1: i32, val2: i32) -> i32 {
    // TODO
    0
}

fn subtract(val1: i32, val2: i32) -> i32 {
    // TODO
    0
} 

#[test]
fn add_works() {
    assert_eq!(add(2, 2), 4);
}