def string_spolosion(str)
	strlen=str.length
	result=""
	for i in 0..(strlen-1)
		result << str[0..i]
		i+=1
	end
	return result
end


