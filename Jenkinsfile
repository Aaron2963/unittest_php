pipeline {
    agent any

    environment {
        GITHUB_TOKEN = credentials('24ee2eb0-d269-4cee-b9a8-8e0ef11b911e')
    }

    stages {
        stage('Checkout') {
            steps {
                git url: 'https://github.com/Aaron2963/unittest_php.git',
                credentialsId: '24ee2eb0-d269-4cee-b9a8-8e0ef11b911e'
            }
        }

        stage('Unit Tests') {
            steps {
                sh 'vendor/bin/phpunit'
                xunit([
                    thresholds: [
                        failed ( failureThreshold: "0" ),
                        skipped ( unstableThreshold: "0" )
                    ],
                    tools: [
                        PHPUnit(pattern: 'build/logs/junit.xml', stopProcessingIfError: true, failIfNotNew: true)
                    ]
                ])
                publishHTML([
                    allowMissing: false,
                    alwaysLinkToLastBuild: false,
                    keepAll: false,
                    reportDir: 'build/coverage',
                    reportFiles: 'index.html',
                    reportName: 'Coverage Report (HTML)',
                    reportTitles: ''
                ])
                discoverGitReferenceBuild()
                recordCoverage(tools: [[parser: 'COBERTURA', pattern: 'build/logs/cobertura.xml']])
            }
        }
    }
}
