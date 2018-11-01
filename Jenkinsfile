node{
    def app
    def dockerfile = 'app1.dockerfile'

    stage('Build'){
        app = docker.build("test-image", "-f app1.dockerfile .").withRun('-p 8092:80')
    }
}
