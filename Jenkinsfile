node{
    def app

    stage('Build'){
        app = docker.build("test-image").withRun('-p 8092:80')
    }
}
