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
@Table(name = "sny_m_organisasi")
@XmlRootElement
@NamedQueries({
    @NamedQuery(name = "SnyMOrganisasi.findAll", query = "SELECT s FROM SnyMOrganisasi s")})
public class SnyMOrganisasi implements Serializable {
    private static final long serialVersionUID = 1L;
    @Id
    @Basic(optional = false)
    @Column(name = "ID")
    private String id;
    @Basic(optional = false)
    @Column(name = "Unit_Desc")
    private String unitDesc;
    @Column(name = "Level")
    private Short level;
    @Basic(optional = false)
    @Column(name = "ID_Parent")
    private String iDParent;
    @Basic(optional = false)
    @Column(name = "Keterangan")
    private String keterangan;
    @Basic(optional = false)
    @Column(name = "Last_Modified")
    @Temporal(TemporalType.TIMESTAMP)
    private Date lastModified;

    public SnyMOrganisasi() {
    }

    public SnyMOrganisasi(String id) {
        this.id = id;
    }

    public SnyMOrganisasi(String id, String unitDesc, String iDParent, String keterangan, Date lastModified) {
        this.id = id;
        this.unitDesc = unitDesc;
        this.iDParent = iDParent;
        this.keterangan = keterangan;
        this.lastModified = lastModified;
    }

    public String getId() {
        return id;
    }

    public void setId(String id) {
        this.id = id;
    }

    public String getUnitDesc() {
        return unitDesc;
    }

    public void setUnitDesc(String unitDesc) {
        this.unitDesc = unitDesc;
    }

    public Short getLevel() {
        return level;
    }

    public void setLevel(Short level) {
        this.level = level;
    }

    public String getIDParent() {
        return iDParent;
    }

    public void setIDParent(String iDParent) {
        this.iDParent = iDParent;
    }

    public String getKeterangan() {
        return keterangan;
    }

    public void setKeterangan(String keterangan) {
        this.keterangan = keterangan;
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
        if (!(object instanceof SnyMOrganisasi)) {
            return false;
        }
        SnyMOrganisasi other = (SnyMOrganisasi) object;
        if ((this.id == null && other.id != null) || (this.id != null && !this.id.equals(other.id))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "com.org.sanaya.master.SnyMOrganisasi[ id=" + id + " ]";
    }
    
}
