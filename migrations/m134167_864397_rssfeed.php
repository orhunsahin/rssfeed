<?php

use yii\db\Migration;

class m134167_864397_rssfeed extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

		$this->createTable('rssfeed', [
            'rss_no' => $this->primaryKey(),
            'rss_adi' => $this->varchar(32)->notNull(),
			'rss_rss_aciklama' => $this->text()->notNull(),
            'rss_rss_link' => $this->text(),
        ]);

        $this->insert('rssfeed', [
            'rss_no' => '1',
            'rss_adi' => 'Vatan',
			'rss_aciklama' => 'Vatan Gazetesi RSS',
			'rss_link' => 'http://www.gazetevatan.com/rss/gundem.xml',
            
        ]);
		
		$this->insert('rssfeed', [
            'rss_no' => '2',
            'rss_adi' => 'Milliyet',
			'rss_aciklama' => 'Milliyet Gazetesi RSS',
			'rss_link' => 'http://www.milliyet.com.tr/rss/rssNew/gundemRss.xml',
            
        ]);
		
		$this->insert('rssfeed', [
            'rss_no' => '3',
            'rss_adi' => 'Sözcü',
			'rss_aciklama' => 'Sözcü Gazetesi RSS',
			'rss_link' => 'http://www.sozcu.com.tr/rss/gundem.xml',
            
        ]);
		
		$this->insert('rssfeed', [
            'rss_no' => '4',
            'rss_adi' => 'Star',
			'rss_aciklama' => 'Star Gazetesi RSS',
			'rss_link' => 'http://www.stargazete.com/rss/rss.asp',
            
        ]);
		
		$this->insert('rssfeed', [
            'rss_no' => '5',
            'rss_adi' => 'Posta',
			'rss_aciklama' => 'Posta Gazetesi RSS',
			'rss_link' => 'http://www.posta.com.tr/rss/gundem.xml',
            
        ]);
    }
	

    public function down()
    {
        $this->dropTable('{{%rssfeed}}');
    }
	
	
	
}
