<!DOCTYPE html>
<html lang="en">
<head>
    <title>three.js webgl - orbit controls</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <style>
        body {
            color: #000;
            font-family:Monospace;
            font-size:13px;
            text-align:center;
            font-weight: bold;

            background-color: #fff;
            margin: 0px;
            overflow: hidden;
        }

    </style>
</head>

<body>

<script src="js/three-js/build/three.js"></script>
<script src="js/three-js/examples/js/controls/OrbitControls.js"></script>
<script src="js/three-js/examples/js/WebGL.js"></script>

<script>

    if ( WEBGL.isWebGLAvailable() === false ) {
        document.body.appendChild( WEBGL.getWebGLErrorMessage() );
    }

    var camera, controls, scene, renderer;

    init();
    animate();

    function init() {
        var lungime = 30;
        var latime = 16;
        var inaltime = 5;


        scene = new THREE.Scene();
        scene.background = new THREE.Color( 0x3e3e3e );

        renderer = new THREE.WebGLRenderer( /*{ antialias: true }*/ );
        renderer.setPixelRatio( window.devicePixelRatio );
        renderer.setSize( window.innerWidth, window.innerHeight );
        document.body.appendChild( renderer.domElement );

        camera = new THREE.PerspectiveCamera( 60, window.innerWidth / window.innerHeight, 1, 1500 );
        camera.position.set( -45, 20, 35 );

        // controls
        controls = new THREE.OrbitControls( camera, renderer.domElement );

        controls.enableDamping = true;
        controls.dampingFactor = 0.25;

        controls.screenSpacePanning = true;

        controls.minDistance = lungime;
        controls.maxDistance = 100;

        controls.maxPolarAngle = Math.PI / 2;

        // the ground
        var material = new THREE.MeshLambertMaterial({ color: 0x3e3e3e, flatShading: true });
        var geometry = new THREE.PlaneGeometry(1400,1400);

        var ground = new THREE.Mesh(geometry,material);
        ground.position.y = -1; //lower it
        ground.rotation.x = -Math.PI/2; //-90 degrees around the x axis
        scene.add(ground);

        // building
        var geometry = new THREE.BoxBufferGeometry( lungime, inaltime, latime );
        var material = new THREE.MeshLambertMaterial({ color: 0x6d98aa });
        mesh = new THREE.Mesh( geometry, material );
        mesh.position.y = inaltime / 2 -1;
        scene.add( mesh );


        // lights
        var light = new THREE.DirectionalLight( 0xffffff );
        light.position.set( -50, 20, 25 );
        scene.add( light );


        var light = new THREE.AmbientLight( 0xcccccc );
        scene.add( light );

        //

        window.addEventListener( 'resize', onWindowResize, false );

    }

    function onWindowResize() {

        camera.aspect = window.innerWidth / window.innerHeight;
        camera.updateProjectionMatrix();

        renderer.setSize( window.innerWidth, window.innerHeight );

    }

    function animate() {

        requestAnimationFrame( animate );

        controls.update(); // only required if controls.enableDamping = true, or if controls.autoRotate = true

        render();

    }

    function render() {

        renderer.render( scene, camera );

    }

</script>

</body>
</html>
