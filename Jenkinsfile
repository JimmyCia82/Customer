node{
    def app
    def dockerfile = 'app1.dockerfile'
    
environment {
    PATH = "C:\\Program Files\\Git\\usr\\bin;C:\\Program Files\\Git\\bin;${env.PATH}"
    
    stage('Build'){
        app = docker.build("test-image", "-f app1.dockerfile .").withRun('-p 8092:80')
    }
}
}
