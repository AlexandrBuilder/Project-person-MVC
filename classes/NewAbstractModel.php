<?php

/**
 * Created by PhpStorm.
 * User: Киселев
 * Date: 15.06.2017
 * Time: 15:59
 */
class NewAbstractModel
{

    protected static $table;
   /* public static function getTable()
    {
        return static::$table;
    }*/
     public $data=[];

     public function __set($name, $value)
     {
         $this->data[$name]->$value;
     }
    public function __get($name)
    {
        $this->data[$name];
    }

    public function insert()
    {
        $cols=array_keys($this->data);
        //var_dump($data);
        foreach ($cols as $col)
        {
            $ins[]=" :".$col;
            $data[":".$col]=$this->data[$col];
        }
        $sql="INSERT INTO ".static::$table."(".implode(", ",$cols).") VALUES (".implode(", ",$ins).")";
      //  echo $sql;
        $db=new NewBD();
        var_dump($data);
        $db->execute($sql,$data);
        return $cols;
    }

    public function update($id)
    {
        $cols=array_keys($this->data);
        $data[':id']=$id;
        foreach ($cols as $col)
        {
            $ins[]=$col."=:".$col;
            $data[":".$col]=$this->data[$col];
        }
         echo $sql="UPDATE ".static::$table." SET ".implode( ",",$ins)." WHERE id=:id";
        $db=new NewBD();
        //var_dump($data);
        $db->execute($sql,$data);
        return $cols;

    }

    public static function delete($id)
    {
       echo $sgl="DELETE FROM ".static::$table." WHERE id=:id";

       $db=new NewBD();
        $db->execute($sgl,[":id"=>$id]);
    }

    public static function getAll()
   {
       $class=get_called_class();
    $table=static::$table;
    $sgl="SELECT * FROM ".$table;
    $db=new NewBD();
    $db->setClassName($class);
    return $res=$db->query($sgl);
   }

    public static function getOne($id)
    {
        $class=get_called_class();
        $table=static::$table;
        $sgl="SELECT * FROM ".$table." WHERE id=:id";
        $db=new NewBD();
        $db->setClassName($class);
        return $res=$db->query($sgl,[':id'=>$id]);
    }
}