<?php
/**
 * Created by PhpStorm.
 * User: pt.son
 * Date: 6/27/14
 * Time: 9:06 AM
 */
class GetFeed{
    /**
     * @var string $feedUrl  - The url of the feed
     */
    public $feedUrl;
    public $page_domain="";

    public function getFeeds()
    {
        $rawFeed = file_get_contents($this->feedUrl);

        // give an XML object to be iterate
        $xml = new SimpleXMLElement($rawFeed);

        $news = array();

        foreach($xml->channel->item as $item)
        {
            $news[]= $item;
        }

        return $news;
    }

    /** check if the pc is connected to internet
     * @return TRUE if there is a connection
     */
    private function checkConnection()
    {
        // Initiates a socket connection to www.google.com at port 80
        $conn = @fsockopen("www.google.com", 80);
        if($conn)
        {
            // there is a connection
            fclose($conn);
            return TRUE;
        }

        return FALSE;
    }
    public function getAsXMLContent($xmlElement)
    {
        $content=$xmlElement->asXML();

        $end=strpos($content,'>');
        if ($end!==false)
        {
            $tag=substr($content, 1, $end-1);

            return str_replace(array('<'.$tag.'>', '</'.$tag.'>'), '', $content);
        }
        else
            return '';
    }
    /*Get Content New Page Other */

    public function getNewsArticle(){
        switch($this->page_domain){
            /*page vnexpress.net*/
            case "vnexpress.net":
                $feed=$this->getFeeds();
                $item=$feed[0];
                $str_description=$this->getAsXMLContent($item->description);
                $img=explode('src',$str_description);
                if(isset($img[1])){
                    $img=explode('"',$img[1]);
                    if(isset($img[1])){
                        $img=explode('"',$img[1]);
                    }
                    $img=$img[0];
                    $rootPath = Yii::app()->params["dirname"];
                    $file_name=explode("/",$img);
                    copy($img, $rootPath.'/upload/'.$file_name[count($file_name)-1]);
                }
                break;
        }
    }
}