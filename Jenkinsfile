pipeline{
    agent any
    options {
        timeout(time: 1, unit: 'HOURS')
    }
        stages{
            
            stage('Build'){
                steps{
                    echo 'Hello World'
                    //app = docker.build("test-image", "-f app1.dockerfile .").withRun('-p 8092:80')
                }
            }
        }

}