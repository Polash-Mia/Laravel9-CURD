<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    private static $image,$imageUrl,$imageName,$directory,$extension,$student;

    public static function getImageUrl($request)
    {
        self::$image=$request->file('image');
        self::$extension=self::$image->getClientOriginalExtension();
        self::$imageName='ssmsb7_'.time().'.'.self::$extension;
        self::$directory='img/student-images/';
        self::$image->move(self::$directory,self::$imageName);

        return self::$directory.self::$imageName;
    }

    public static  function newStudent($request)
    {
        self::$student = new Student();
        self::$student->name = $request->name;
        self::$student->email = $request->email;
        self::$student->mobile = $request->mobile;
        self::$student->address = $request->address;
        self::$student->image = self::getImageUrl($request);
        self::$student->save();
    }

    public static function updateStudent($request, $id)
    {

        self::$student = Student::find($id);
        if($request->file('image'))
        {
            if(file_exists(self::$student->image))
            {
                unlink(self::$student->image);
            }
            self::$imageUrl=self::getImageUrl($request);

        }
        else
        {
            self::$imageUrl=self::$student->image;
        }

        self::$student->name = $request->name;
        self::$student->email = $request->email;
        self::$student->mobile = $request->mobile;
        self::$student->address = $request->address;
        self::$student->image = self::$imageUrl;
        self::$student->save();
        
    }

    public static function deleteStudent($id)
    {
       self::$student = Student::find($id);

       if(file_exists(self::$student->image))
       {
        unlink(self::$student->image);

       }
       self::$student->delete();

    }
}
