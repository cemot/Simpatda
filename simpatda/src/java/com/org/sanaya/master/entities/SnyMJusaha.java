/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package com.org.sanaya.master.entities;

import java.io.Serializable;
import java.util.Date;
import javax.persistence.*;
import javax.xml.bind.annotation.XmlRootElement;

/**
 *
 * @author sanaya
 */
@Entity
@Table(name = "sny_m_jusaha")
@XmlRootElement
@NamedQueries({
    @NamedQuery(name = "SnyMJusaha.findAll", query = "SELECT s FROM SnyMJusaha s")})
public class SnyMJusaha implements Serializable {
    private static final long serialVersionUID = 1L;
    @Id
    @Basic(optional = false)
    @Column(name = "ID")
    private String id;
    @Basic(optional = false)
    @Column(name = "Description")
    private String description;
    @Basic(optional = false)
    @Column(name = "Last_Modified")
    @Temporal(TemporalType.TIMESTAMP)
    private Date lastModified;

    public SnyMJusaha() {
    }

    public SnyMJusaha(String id) {
        this.id = id;
    }

    public SnyMJusaha(String id, String description, Date lastModified) {
        this.id = id;
        this.description = description;
        this.lastModified = lastModified;
    }

    public String getId() {
        return id;
    }

    public void setId(String id) {
        this.id = id;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public Date getLastModified() {
        return lastModified;
    }

    public void setLastModified(Date lastModified) {
        this.lastModified = lastModified;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (id != null ? id.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof SnyMJusaha)) {
            return false;
        }
        SnyMJusaha other = (SnyMJusaha) object;
        if ((this.id == null && other.id != null) || (this.id != null && !this.id.equals(other.id))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "com.org.sanaya.master.SnyMJusaha[ id=" + id + " ]";
    }
    
}
