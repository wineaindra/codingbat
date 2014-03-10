def missing_char(string,n)
	return string.delete!(string[n])
end
puts missing_char("kitten",1) == "ktten" ? "pass" : "fail"
puts missing_char("kitten",0) == "itten" ? "pass" : "fail"
puts missing_char("kitten",4) == "kittn" ? "pass" : "fail"
