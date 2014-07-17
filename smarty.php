<?php
    class Smarty{
        //模板{*..*}里面的是变量名
        function assign($content, $replacement=null){
            if($replacement != ''){
                $this->arr[$content] = $replacement;
            }
        }
        function display($page){
            //判断模板目录是否存在 $tplFile
            //编译后文件存放目录 $comFile
            $tplContent = $this->con_replace(file_get_contents($tplFile));
            file_put_contents($comFile, $tplFile);
        }
        function con_replace($content){
            $pattern = array('/<{\s*\$([.....]*)>/i');
            $replacement = array('<?php echo $this->arr['${1}']>');
            return preg_replace($pattern, $replacement, $content);
        }
    }
?>
