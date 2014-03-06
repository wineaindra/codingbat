def monkey_trouble(a_smile, b_smile)
	return (a_smile && b_smile) || !(a_smile || b_smile) 
end
puts monkey_trouble(false,false) ? "pass": "fail"
puts monkey_trouble(true,true) ? "pass" : "fail"
puts monkey_trouble(true,false) ? "fail" : "pass"