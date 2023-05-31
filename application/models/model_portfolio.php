<?php
class Model_Portfolio extends Model
{
	public function get_data()
	{	
		// Здесь мы просто симулируем реальные данные.
		return array(
			array(
				'Year' => '2012',
				'Site' => 'http://house1.ru',
				'Description' => 'Небольшой дом в подмосковье.'
			),
			array(
				'Year' => '2013',
				'Site' => 'http://house2.ru',
				'Description' => 'Три кунга для компании в сфере туризма.'
			),
			array(
				'Year' => '2014',
				'Site' => 'http://house3.ru',
				'Description' => 'Большой коттедж в Ленинградской области.'
			),
			array(
				'Year' => '2016',
				'Site' => 'http://house4.ru',
				'Description' => 'Жилой комплекс в Москве.'
			),
			array(
				'Year' => '2017',
				'Site' => 'http://house5.ru',
				'Description' => 'Двух этажная экспозиция.'
			),
			array(
				'Year' => '2020',
				'Site' => 'http://house6.ru',
				'Description' => 'Реставрация старого дома в одном из поселков Ростовской области.'
			),
		);
	}
}