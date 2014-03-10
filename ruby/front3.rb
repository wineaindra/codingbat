def front3(string)
	return string[0...3]*3
end
puts front3("Java")=="JavJavJav" ? "pass" : "fail"
puts front3("abc")=="abcabcabc" ? "pass" : "fail"
puts front3("Chocolate")=="ChoChoCho" ? "pass" : "fail"
puts front3("ab")== "ababab" ? "pass" : "fail"