def last2(str)
	last2=str.split(//).last(2).join
	count=0
	strlen=str.length
	for i in 0..(strlen-4)
		if str[i..(i+1)]==last2
			count+=1
		end
	end
	return count
end
