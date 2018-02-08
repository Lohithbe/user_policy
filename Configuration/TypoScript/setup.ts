
plugin.tx_userpolicy_managementonpolicy {
    view {
        templateRootPaths.0 = EXT:user_policy/Resources/Private/Templates/
        templateRootPaths.1 = {$plugin.tx_userpolicy_managementonpolicy.view.templateRootPath}
        partialRootPaths.0 = EXT:user_policy/Resources/Private/Partials/
        partialRootPaths.1 = {$plugin.tx_userpolicy_managementonpolicy.view.partialRootPath}
        layoutRootPaths.0 = EXT:user_policy/Resources/Private/Layouts/
        layoutRootPaths.1 = {$plugin.tx_userpolicy_managementonpolicy.view.layoutRootPath}
    }
    persistence {
        storagePid = {$plugin.tx_userpolicy_managementonpolicy.persistence.storagePid}
        #recursive = 1
    }
    features {
        #skipDefaultArguments = 1
        # if set to 1, the enable fields are ignored in BE context
        ignoreAllEnableFieldsInBe = 0
        # Should be on by default, but can be disabled if all action in the plugin are uncached
        requireCHashArgumentForActionArguments = 1
    }
    mvc {
        #callDefaultActionIfActionCantBeResolved = 1
    }
}

plugin.tx_userpolicy_userplugin {
    view {
        templateRootPaths.0 = EXT:user_policy/Resources/Private/Templates/
        templateRootPaths.1 = {$plugin.tx_userpolicy_userplugin.view.templateRootPath}
        partialRootPaths.0 = EXT:user_policy/Resources/Private/Partials/
        partialRootPaths.1 = {$plugin.tx_userpolicy_userplugin.view.partialRootPath}
        layoutRootPaths.0 = EXT:user_policy/Resources/Private/Layouts/
        layoutRootPaths.1 = {$plugin.tx_userpolicy_userplugin.view.layoutRootPath}
    }
    persistence {
        storagePid = {$plugin.tx_userpolicy_userplugin.persistence.storagePid}
        #recursive = 1
    }
    features {
        #skipDefaultArguments = 1
        # if set to 1, the enable fields are ignored in BE context
        ignoreAllEnableFieldsInBe = 0
        # Should be on by default, but can be disabled if all action in the plugin are uncached
        requireCHashArgumentForActionArguments = 1
    }
    mvc {
        #callDefaultActionIfActionCantBeResolved = 1
    }
}

plugin.tx_userpolicy_billplugin {
    view {
        templateRootPaths.0 = EXT:user_policy/Resources/Private/Templates/
        templateRootPaths.1 = {$plugin.tx_userpolicy_billplugin.view.templateRootPath}
        partialRootPaths.0 = EXT:user_policy/Resources/Private/Partials/
        partialRootPaths.1 = {$plugin.tx_userpolicy_billplugin.view.partialRootPath}
        layoutRootPaths.0 = EXT:user_policy/Resources/Private/Layouts/
        layoutRootPaths.1 = {$plugin.tx_userpolicy_billplugin.view.layoutRootPath}
    }
    persistence {
        storagePid = {$plugin.tx_userpolicy_billplugin.persistence.storagePid}
        #recursive = 1
    }
    features {
        #skipDefaultArguments = 1
        # if set to 1, the enable fields are ignored in BE context
        ignoreAllEnableFieldsInBe = 0
        # Should be on by default, but can be disabled if all action in the plugin are uncached
        requireCHashArgumentForActionArguments = 1
    }
    mvc {
        #callDefaultActionIfActionCantBeResolved = 1
    }
}

plugin.tx_userpolicy_policyplugin {
    view {
        templateRootPaths.0 = EXT:user_policy/Resources/Private/Templates/
        templateRootPaths.1 = {$plugin.tx_userpolicy_policyplugin.view.templateRootPath}
        partialRootPaths.0 = EXT:user_policy/Resources/Private/Partials/
        partialRootPaths.1 = {$plugin.tx_userpolicy_policyplugin.view.partialRootPath}
        layoutRootPaths.0 = EXT:user_policy/Resources/Private/Layouts/
        layoutRootPaths.1 = {$plugin.tx_userpolicy_policyplugin.view.layoutRootPath}
    }
    persistence {
        storagePid = {$plugin.tx_userpolicy_policyplugin.persistence.storagePid}
        #recursive = 1
    }
    features {
        #skipDefaultArguments = 1
        # if set to 1, the enable fields are ignored in BE context
        ignoreAllEnableFieldsInBe = 0
        # Should be on by default, but can be disabled if all action in the plugin are uncached
        requireCHashArgumentForActionArguments = 1
    }
    mvc {
        #callDefaultActionIfActionCantBeResolved = 1
    }
}

plugin.tx_userpolicy_vehicleplugin {
    view {
        templateRootPaths.0 = EXT:user_policy/Resources/Private/Templates/
        templateRootPaths.1 = {$plugin.tx_userpolicy_vehicleplugin.view.templateRootPath}
        partialRootPaths.0 = EXT:user_policy/Resources/Private/Partials/
        partialRootPaths.1 = {$plugin.tx_userpolicy_vehicleplugin.view.partialRootPath}
        layoutRootPaths.0 = EXT:user_policy/Resources/Private/Layouts/
        layoutRootPaths.1 = {$plugin.tx_userpolicy_vehicleplugin.view.layoutRootPath}
    }
    persistence {
        storagePid = {$plugin.tx_userpolicy_vehicleplugin.persistence.storagePid}
        #recursive = 1
    }
    features {
        #skipDefaultArguments = 1
        # if set to 1, the enable fields are ignored in BE context
        ignoreAllEnableFieldsInBe = 0
        # Should be on by default, but can be disabled if all action in the plugin are uncached
        requireCHashArgumentForActionArguments = 1
    }
    mvc {
        #callDefaultActionIfActionCantBeResolved = 1
    }
}

# these classes are only used in auto-generated templates
plugin.tx_userpolicy._CSS_DEFAULT_STYLE (
    textarea.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    input.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    .tx-user-policy table {
        border-collapse:separate;
        border-spacing:10px;
    }

    .tx-user-policy table th {
        font-weight:bold;
    }

    .tx-user-policy table td {
        vertical-align:top;
    }

    .typo3-messages .message-error {
        color:red;
    }

    .typo3-messages .message-ok {
        color:green;
    }
)
