module.exports = {
  "env": {
    "commonjs": {
      "presets": [
        [
          "@babel/preset-env",
          {
            "debug": false,
            "modules": "commonjs",
            "targets": {
              "node": "8"
            },
            "forceAllTransforms": false,
            "ignoreBrowserslistConfig": true
          }
        ]
      ],
      "plugins": [
        [
          "@babel/plugin-transform-modules-commonjs",
          {
            "loose": true
          }
        ],
        "@babel/proposal-class-properties",
        "@babel/proposal-object-rest-spread",
        "@babel/plugin-proposal-optional-chaining",
      ]
    },
    "es": {
      "presets": [
        [
          "@babel/preset-env",
          {
            "debug": false,
            "modules": false
          }
        ],
        "@babel/preset-react",
      ],
      "plugins": [
        [
          "@babel/plugin-transform-runtime",
          {
            "absoluteRuntime": false,
            "corejs": 2,
            "version": "^7.11.2"
          }
        ],
        "@babel/proposal-class-properties",
        "@babel/proposal-object-rest-spread",
        "@babel/plugin-proposal-optional-chaining",
      ]
    },
    "browser": {
      "sourceType": "unambiguous", // https://github.com/webpack/webpack/issues/4039#issuecomment-419284940
      "presets": [
        [
          "@babel/preset-env",
          {
            "debug": false,
          }
        ],
        "@babel/preset-react",
      ],
      "plugins": [
        [
          "@babel/plugin-transform-runtime",
          {
            "corejs": 2,
            "version": "^7.11.2"
          }
        ],
        "@babel/proposal-class-properties",
        "@babel/proposal-object-rest-spread",
        "@babel/plugin-proposal-optional-chaining",
      ]
    },
    "development": {
      "presets": [
        [
          "@babel/env",
          {
            "targets": {
              "browsers": [
                /* benefit of C/S/FF/Edge only? */
                "> 1%",
                "last 2 versions",
                "Firefox ESR",
                "not dead"
              ]
            },
            "useBuiltIns": "entry",
            "corejs": 3
          }
        ],
        "@babel/preset-react"
      ],
      "plugins": [
        [
          "@babel/plugin-transform-runtime",
          {
            "corejs": "3",
            "absoluteRuntime": false,
            "version": "7.11.2"
          }
        ],
        "@babel/plugin-proposal-class-properties",
        "@babel/plugin-proposal-optional-chaining",
        [
          "transform-react-remove-prop-types",
          {
            "additionalLibraries": [
              "react-immutable-proptypes"
            ]
          }
        ],
        [
          "babel-plugin-module-resolver",
          {
            "alias": {
              "plugins": "./src/plugins",
              "test": "./test",
              "src": "./src"
            }
          }
        ]
      ]
    },
    "test": {
      "presets": [
        [
          "@babel/env",
          {
            "targets": {
              "node": "10"
            },
            "useBuiltIns": "entry",
            "corejs": 3
          }
        ],
        "@babel/preset-react"
      ],
      "plugins": [
        [
          "@babel/plugin-transform-runtime",
          {
            "corejs": "3",
            "absoluteRuntime": false,
            "version": "7.11.2"
          }
        ],
        "@babel/plugin-proposal-class-properties",
        "@babel/plugin-proposal-optional-chaining",
        [
          "transform-react-remove-prop-types",
          {
            "additionalLibraries": [
              "react-immutable-proptypes"
            ]
          }
        ],
        [
          "babel-plugin-module-resolver",
          {
            "alias": {
              "plugins": "./src/plugins",
              "test": "./test",
              "src": "./src"
            }
          }
        ]
      ]
    }
  }
}
