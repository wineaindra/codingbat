def front_back(string)
	first=string[0]
	last=string[-1]
	string[-1]=first
	string[0]=last
	return string
end
puts front_back("code") == "eodc" ? "pass" : "fail"
puts front_back("a") == "a" ? "pass" : "fail"
puts front_back("ab") == "ba" ? "pass" : "fail"
