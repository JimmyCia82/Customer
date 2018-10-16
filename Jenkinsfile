node{
    def app

    stage('Build'){
        app = docker.build("test-image", "/app1.dockerfile").withRun('-p 8092:80')
    }
}
