struct Person {
    // age in years
    age: i32
}

impl Person {

    fn is_older_than(&self, other: &Person) -> bool {
        self.age > other.age
    }

}

#[test]
fn test_is_older_than() {
    let jan = Person {
        age: 20
    };
    let julie = Person {
        age: 34
    };
    assert!(!jan.is_older_than(&julie));
    assert!(julie.is_older_than(&jan));
}