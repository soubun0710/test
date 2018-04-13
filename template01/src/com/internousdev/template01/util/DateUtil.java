package com.internousdev.template01.util;

import java.text.SimpleDateFormat;
import java.util.Date;

public class DateUtil {
	public String getDate(){
		Date date=new Date();
		SimpleDateFormat sdf=new SimpleDateFormat("yyy/MM/dd HH:mm:ss");
		return sdf.format(date);
	}

}
