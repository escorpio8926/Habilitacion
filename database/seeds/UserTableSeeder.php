<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //generamos 5 usuarios con datos
  for ($i=0; $i < 5 ; $i++) {
  	$u=new App\User();
  	$u->name='u'.$i;
  	$u->email='u'.$i.'@a.com';
  	$u->password=bcrypt('123456');
  	$u->save();
  } //for ($i=0; $i < 5 ; $i++) {
  //generamos 1 usuario más
  App\User::create(
  		[
  			'name' => 'Emmanuel',
  			'email' => 'Emmanuel@gmail.com',
  			'password' => bcrypt('1234')
  		]
  );
  //genera 10 usuarios según la definicion del modelo
  //en el archivo /database/factories/ModelFactory.php
  factory(App\User::class,10)->create();

  //agregamos un usuario
$u1=new App\User();
$u1->name='user1';
$u1->email='user1@a.com';
$u1->password=bcrypt('123456');
$u1->save();

//creamos una instancia del servicio de faker para poder obtener valores aleatorios
$f=Faker\Factory::create();
//creamos 50 proyectos
for ($j=0; $j < 50 ; $j++) {
	$p1= new App\Proyecto();
	$p1->titulo="proyecto $j :: ".$f->name;
	$p1->descripcion=$f->text;
	//asignamos el proyecto al usuario 1
	$u1->proyectos()->save($p1);
	//generamos entre 1 y 10 tareas para el proyecto
	for ($i=0; $i < $f->numberBetween(1,10) ; $i++) {
		$t=new App\Actividade();
		$t->actividad="Actividad : ".$f->name;
		$p1->actividades()->save($t);
	} //for ($i=0; $i < 5 ; $i++)
} //for ($j=0; $j < 50 ; $j++)
    }
}
