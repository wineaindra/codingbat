def not_string(string)
	var = "not"
	if string.split(" ").first == "not"
		return string
	else
		return var+" "+string
	end
end
puts not_string("candy")=="not candy" ? "pass" : "fail"
puts not_string("not x")=="not x" ? "pass" : "fail"
puts not_string("girl")=="not girl" ? "pass" : "fail"
